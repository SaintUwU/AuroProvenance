import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';
import Web3 from 'web3';
import axios from 'axios';

window.Web3=Web3;
document.onreadystatechange= () => {
    const metaMaskLogInButton = document.getElementById("metamask-login");
    if (metaMaskLogInButton != null ){
        metaMaskLogInButton.onclick = async (event) => {
            if(!window.ethereum){
                console.error("Metamask not exist");
                return;
            }

            const Web3= new Web3(window.ethereum);
            
            const signatureUrl = metaMaskLogInButton.getAttribute("data-signature-url");
            const authenticateUrl= metaMaskLogInButton.getAttribute("data-authenticate-url");
            const redirectUrl= metaMaskLogInButton.getAttribute("data-redirect-Url");

            const message =(await axios.get(signatureUrl)).data;
            const [ address ] = await Web3.eth.requestAccounts();

            const signature = await Web3.eth.personal.sign(message,address);

            try{
                const { status } = await axios.post(authenticateUrl,{
                    'address': address,
                    'signature':signature
                });
                if (status==200){
                    window.location=redirectUrl;
                }
     }
            catch (e) {
                console.error(e);
            }
        }
    }
}
const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
module.exports = {

    content: [
        "./node_modules/flowbite/**/*.js"
    ]

}

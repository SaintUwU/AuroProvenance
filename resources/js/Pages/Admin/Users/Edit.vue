<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {Head,Link,useForm} from "@inertiajs/vue3";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import Multiselect from 'vue-multiselect';
import { onMounted, watch } from 'vue';
const props = defineProps({
    user: {
        type: Object,
        required: true
    },
    roles: Array
})
const form=useForm({
    name: props.user?.name,
    email: props.user?.email,
    roles:[],
    
    

})



</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                 Update Details
            </h1>
       
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
           <div class="flex justify-between"> 
            
           <Link :href="route('users.index')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
            Back to Users</Link>
        </div>
        <div class="mt-6 max-w-md max-auto">

        <form @submit.prevent="form.put(route('users.update', props.user?.id))">
            <div>
            <InputLabel for="name" value="Name"/>
            <TextInput
            id="name"
            type="text"
            class="mt-1 block w-full"
            v-model="form.name"
            
            autofocus
            required
            />
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
            <div>
            <InputLabel for="name" value="Email"/>
            <TextInput
            id="name"
            type="email"
            class="mt-1 block w-full"
            v-model="form.email"
            
            autofocus
            required/>
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
            <div>
            <InputLabel for="roles" value="Choose Role"/>
            <Multiselect
            id="roles"
            v-model="form.roles"
            :options="roles"
            :multiple="true"
            :close-on-select="true"
            placeholder="Pick a role"
            label="name"
            track-by="id"
            
            autofocus
            required/>
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
           
            <div class="flex items-center mt-4">
                <PrimaryButton class="ml-4" :class="{'opacity-25':form.processing}" :disabled="form.processing">
                    Update Records
                </PrimaryButton>
            </div>
        </form>

        </div>
    </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {Head,Link,useForm} from "@inertiajs/vue3";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";


const props = defineProps({
    user: {
        type: Object,
        required: true
    }
})
const form=useForm({
    name:"",
    CarId:"",
    ownerId:"",
})
</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Add new Vehicle
            </h1>
       
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
           <div class="flex justify-between"> 
            
           <Link :href= " route('user.index')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
            Back to Vehicles</Link>
        </div>
        <div class="mt-6 max-w-md max-auto">

        <form @submit.prevent="form.post(route('user.store'))">
            <div>
            <InputLabel for="name" value="Name"/>
            <TextInput
            id="name"
            type="text"
            class="mt-1 block w-full"
            v-model="form.name"
            
            autofocus/>
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
           
            <div>
            <InputLabel for="Car" value="License Plate"/>
            <TextInput
            id="Carid"
            type="text"
            class="mt-1 block w-full"
            v-model="form.CarId"
            
            autofocus/>
         
                <PrimaryButton class="ml-4" :class="{'opacity-25':form.processing}" :disabled="form.processing">
                    Add Vehicle
                </PrimaryButton>
            </div>
        </form>

        </div>
    </div>
    </AdminLayout>
</template>

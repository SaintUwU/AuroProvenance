<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {Head,Link,useForm} from "@inertiajs/vue3";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { route } from 'vendor/tightenco/ziggy/src/js';



const form=useForm({
    name:'',
    email:'',
    password:'',
    password_confirmation:'',
    terms: false,
})


</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Create User
            </h1>
       
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
           <div class="flex justify-between"> 
            
           <Link :href= "route('users.index')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
            Back to Users</Link>
        </div>
        <div class="mt-6 max-w-md max-auto">

        <form @submit.prevent="form.post(route('users.store'))">
            <div>
            <InputLabel for="name" value="Name"/>
            <TextInput
            id="name"
            type="text"
            class="mt-1 block w-full"
            v-model="form.name"
            required
            autocomplete = "name"
            autofocus/>
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
           
            <div>
            <InputLabel for="email" value="Email"/>
            <TextInput
            id="email"
            type="email"
            class="mt-1 block w-full"
            v-model="form.email"
            placeholder = "example@gmail.com"
            
            autofocus/>
            </div>
            <div>
            <InputLabel for="email" value="Email"/>
            <TextInput
            id="email"
            type="email"
            class="mt-1 block w-full"
            v-model="form.password"
            
            autofocus/>
            </div>
            <div>
            <InputLabel for="password_confirmation" value="Confirm Password"/>
            <TextInput
            id="password_confirmation"
            type="password"
            class="mt-1 block w-full"
            v-model="form.password_confirmation"
            
            autofocus/>
            </div>
         <br>
            <div>
                <PrimaryButton class="ml-4" :class="{'opacity-25':form.processing}" :disabled="form.processing">
                    Add User
                </PrimaryButton>
            </div>
        </form>

        </div>
    </div>
    </AdminLayout>
</template>

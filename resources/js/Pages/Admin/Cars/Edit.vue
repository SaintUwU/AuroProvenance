<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {Head,Link,useForm} from "@inertiajs/vue3";
import Checkbox from "@/Components/Checkbox.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";

const props = defineProps({
    car: {
        type: Object,
        required: true
    }
})
const form= useForm({
    repairs:"",
    PendingRepairs:"",
    ReplacedParts:"",
})

</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                 Update Details
            </h1>
       
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
           <div class="flex justify-between"> 
            
           <Link :href="route('cars.index')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
            Back To vehicles</Link>
        </div>
        <div class="mt-6 max-w-md max-auto">

        <form @submit.prevent="form.put(route('cars.update', car.CarId))">
            <div>
            <InputLabel for="repairs" value="Repairs"/>
            <TextInput
            id="repairs"
            type="text"
            class="mt-1 block w-full"
            v-model="form.repairs"
            
            autofocus
            />
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
            <div>
            <InputLabel for="PendingRepairs" value="Pending Repairs"/>
            <TextInput
            id="PendingRepairs"
            type="text"
            class="mt-1 block w-full"
            v-model="form.PendingRepairs"
            
            autofocus
            />
            <InputError class="mt-2" :message="form.errors.name"/>
            </div>
            <div>
            <InputLabel for="ReplacedParts" value="Replaced Parts"/>
            <TextInput
            id="ReplacedParts"
            type="text"
            class="mt-1 block w-full"
            v-model="form.ReplacedParts"
            
            autofocus
            />
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

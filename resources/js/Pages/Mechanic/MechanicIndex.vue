<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
import { Link } from '@inertiajs/vue3';


defineProps({
    cars:{
        type:Array,
        required: true
    }
    });
</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
        
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
            <h2>Mechanic's Car Index </h2>
       
        
        <div class="mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Repairs
                </th>
                <th scope="col" class="px-6 py-3">
                    Pending Repairs
                </th>
                <th scope="col" class="px-6 py-3">
                    Replaced Parts               
                 </th>
                <th scope="col" class="px-6 py-3">
                    Action               
                 </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="car in cars" :key="car.CarId" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{  car.name   }}
                </th>
                <td class="px-6 py-4">
                    {{   car.repairs   }}
                </td>
                <td class="px-6 py-4">
                    {{   car.PendingRepairs   }}
                </td>
                <td class="px-6 py-4">
                    {{   car.ReplacedParts   }}
                </td>
                <td class="px-6 py-4">
                    <Link :href="route('mech.edit', car.CarId)" class="text-blue-600 hover:text-blue-900"> Update Details</Link>

                </td>
            </tr>
           
        
        </tbody>
    </table>
</div>
</div>
    </AdminLayout>
</template>
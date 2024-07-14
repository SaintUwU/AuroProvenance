<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
import { Link } from '@inertiajs/vue3';

defineProps(['cars'])
</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
               
            </h1>
        
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
            
            <div>
                <br>
                
            </div>
            <Link :href="route('cars.create')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
                Add a Vehicle</Link>
        
        <div class="mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    repairs
                </th>
                <th scope="col" class="px-6 py-3">
                    Pending Repairs
                </th>
                <th scope="col" class="px-6 py-3">
                    Replaced Parts               
                 </th>
                 <th scope="col" class="px-6 py-3">
                    Mechanic
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
                    {{ car.mechanic_update }}
                </td>
                <td class = "px-6 py-4">
                    <Link :href="route('cars.edit', car.CarId)" class="text-blue-600 hover:text-blue-900"> [ Edit ]</Link>
                    <Link :href="route('cars.destroy', car.CarId)" method="DELETE" as="button" class="text-red-600 hover:text-red-900"> [ Delete ] </Link>

                </td>
               
            </tr>
           
        
        </tbody>
    </table>
</div>
</div>
    </AdminLayout>
</template>
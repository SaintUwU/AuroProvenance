<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {Head,Link} from "@inertiajs/vue3";
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';
//import { route } from 'vendor/tightenco/ziggy/src/js';

defineProps({
    roles: {
        type: Array,
        required: true,
    },
    })
</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
       
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
           <div class="flex justify-between"> 
           <Link :href="route('roles.create')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
            New Role</Link>
        </div>
        <div class="mt-6">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    name
                </th>
                <th scope="col" class="px-6 py-3">
                    action
                </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="role in roles" :key="role.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{  role.id   }}
                </th>
                <td class="px-6 py-4">
                    {{   role.name   }}
              </td>
              <td class="px-6 py-4">
                <Link :href="route('roles.edit', role.id)" class="text-blue-600 hover:text-blue-900"> Edit </Link>
                <Link :href="route('roles.destroy', role.id)" method="DELETE" as="button" class="text-red-600 hover:text-red-900"> Delete </Link>
              </td>
            </tr>
           
        
        </tbody>
    </table>
        </div>
    </div>
    </AdminLayout>
</template>
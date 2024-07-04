<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';

defineProps(['users'])
</script>

<template>
<AdminLayout title="Admin Dashboard">
    
<div class="relative overflow-x-auto">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Action               
                 </th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="user in users" :key="user.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{  user.id   }}
                </th>
                <td class="px-6 py-4">
                    {{   user.name   }}
                </td>
                <td class="px-6 py-4">
                    {{   user.email   }}
                </td>
                <td class="px-6 py-4">
                    Edit/Delete
                </td>
            </tr>
           
            
        </tbody>
    </table>
</div>

    </AdminLayout>
</template>

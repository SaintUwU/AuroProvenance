<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import {Head,Link} from "@inertiajs/vue3"
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';

defineProps(['role'])
</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
       
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
           <div class="flex justify-between"> 
            <h2>Role Index Page</h2>
           <Link :href="route('roles.create')" class="px-3 py-2 text-white font-semibold bg-indigo-500 hover:bg-indigo-700 rounded">
            New Role</Link>
        </div>
        <div class="mt-6">
            <Table>
                <template #header>
                    <TableRow>
                        <TableHeader>id</TableHeader>
                        <TableHeader>Name</TableHeader>
                        <TableHeader>Action</TableHeader>
                    </TableRow>
                </template>
                <template #default>
                    <TableRow v-for="role in roles" :key="role.id"> 
        
                            <TableData>  {{ roles.id }}</TableData>
                            <TableData> {{ roles.name }}</TableData>
                            <TableData> Edit/Delete</TableData>

                    </TableRow>
                </template>
            </Table>
        </div>
    </div>
    </AdminLayout>
</template>

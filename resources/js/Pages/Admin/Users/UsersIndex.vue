<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';

defineProps(['users'])
</script>
<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
        
            <AdminLayout title="Admin Dashboard">
        <div class="max-w-7xl py-4">
            <h2>Users Index Page </h2>
        
        <div class="mt-6">
            <Table>
                <template #header>
                    <TableRow class="border-bottom">
                        <TableHeader> ID </TableHeader>
                        <TableHeader> Name </TableHeader>
                        <TableHeader> Email </TableHeader>
                        <TableHeader> Action </TableHeader>
                    </TableRow>
                </template>
                <template #default>
                    <TableRow v-for="user in users" :key="user.id"> 
        
                            <TableData>    {{  user.id   }}</TableData>
                            <TableData>   {{   user.name   }}</TableData>
                            <TableData>   {{   user.email   }}</TableData>
                            <TableData> Edit/Delete</TableData>

                    </TableRow>
                </template>
            </Table>
        </div>
    </div>
    </AdminLayout>
</template>

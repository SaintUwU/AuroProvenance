<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Table from '@/Components/Table.vue';
import TableRow from '@/Components/TableRow.vue';
import TableHeaderCell from '@/Components/TableHeaderCell.vue';

defineProps(['Cars'])
</script>

<template>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
        
            <AdminLayout title="Admin Dashboard">
                <div class="max-w-7xl py-4">
            <h2>Cars Index Page </h2>
        
        <div class="mt-6">
            <Table>
                <template #header>
                    <TableRow class="border-bottom">
                        <TableHeader>name</TableHeader>
                        <TableHeader> Repairs</TableHeader>
                        <TableHeader> Pending Repairs</TableHeader>
                        <TableHeader> Replaced Parts</TableHeader>
                        <TableHeader> Action</TableHeader>
                    </TableRow>
                    
                </template>
                <template #default>
                    <TableRow v-for="car in cars" :key="car.id"> 
        
                            <TableDataCell>  {{ car.name }}</TableDataCell>
                            <TableDataCell> {{ car.repairs }}</TableDataCell>
                            <TableDataCell> {{ car.PendingRepairs }}</TableDataCell>
                            <TableDataCell> {{ car.ReplacedParts }}</TableDataCell>
                            <TableDataCell> Edit/Delete</TableDataCell>

                    </TableRow>
                </template>
            </Table>
        </div>
    </div>
    </AdminLayout>
</template>

<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import theChart from '@/Components/BarChart.vue';
</script>

<template>
  
        
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h1>
        
            <AdminLayout title="Admin Dashboard">
        <div class="py-4">
            <theChart aria-label="Users of each type in the system"/>
        </div>
    </AdminLayout>
</template>

<script setup >
import AdminLayout from '@/Layouts/AdminLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import 'flowbite';
import BarChart from '@/Components/BarChart.vue';
import Pie from '@/Components/Pie.vue';



defineProps({
    userCount: Number,
    carCount: Number,
})
</script>

<template>
  
        
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">
               Administrator Dashboard
            </h1>
        
            <AdminLayout title="Admin Dashboard">
        <div class="py-4">
            <h1><u>Application Analytics</u></h1>
        </div>
        <div class="py-4 border-x-2 border-y-4 fill-zinc-700">
            <h5><i>Number of Users: {{ userCount }}</i></h5>
            
        </div>
        <div class="py-4 border-x-2 border-y-4">
            <h5><i>Total number of Vehicles: {{ carCount }}</i></h5>
            
        </div>
        <div class="py-4">
            <BarChart />

            
        </div>
        <div class="py-4">
            <Pie/>
            
        </div>
        
    </AdminLayout>
</template>

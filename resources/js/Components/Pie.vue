<script>

import { Pie } from 'vue-chartjs'
import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'


ChartJS.register(ArcElement, Tooltip, Legend)

export default {
  name: 'App',
  components: { Pie },
  data() {

    return{ 
      chartData: {

        labels: ['Administrators', 'Mechanics', 'Normal Users'],
        datasets: [{ data: [2, 3, 3],
          backgroundColor: ['#41B883', '#E46651', '#00D8FF'],
        }],
        

        },
        chartOptions: {
        responsive: true,
        maintainAspectRatio: false
          }
    }
  }
}

</script>
<template>
    <Pie :options="chartOptions" :data="chartData"/>
</template>
<script>

import { Bar } from 'vue-chartjs'
import {Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale} from 'chart.js'


ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

export default {
  props: {
    userCount: Number,
  },
  mounted(){
    console.log(this.userCount);
  },
  name: 'theChart',
  components: { Bar },
  data() {
    return {
      chartData: {
        labels: [ 'Admins', 'Mechanics', 'Owners' ],
        datasets: [ { data: [2, 3, 3],
          backgroundColor: 'rgba(255, 99, 132, 0.2)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
         } ],
        
      },
      chartOptions: {
        scales: {
          y:{ beginAtZero: true}
        },
        layout: {
          padding: {
            top: 0,
            bottom: 0
          }
        },
        responsive: true,
        maintainAspectRatio: false
      }
    }
  }
}
</script>
<template>
  
    <Bar
    id="my-chart-id"
    :options="chartOptions"
    :data="chartData"
    />
</template>
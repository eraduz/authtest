<template>
    <div>
      {{ data.username }}
    </div>
</template>

<script>
import axios from 'axios'
// import api from '@/services/index.php'
export default {
  data () {
    return {
      data: null
    }
  },
  mounted () {
    // axios({
    //   method: 'get',
    //   url: 'http://localhost/server/index.php',
    //   headers: {
    //     'Content-Type': 'application/json',
    //     'Access-Control-Allow-Origin': '*'
    //   }
    // })
    //   .then(res => console.log(res))
    //   .catch(error => console.log(error))
    axios.get('http://localhost/authtest/server/').then(res => {
      this.data = res.data.users[0]
    }).catch(err => console.log(err))
  }
}
</script>

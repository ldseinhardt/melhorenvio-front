<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Example Component</div>
          <div class="panel-body">
            I'm an example component!
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  export default {
    mounted() {
      console.log('Component mounted.');

      // get user data
      axios.get('/api/user').then((response) => {
        console.log(response.data);
      });

      // get packages
      axios.get('/api/packages').then((response) => {
        console.log(response.data);
      });

      // get package by id
      axios.get('/api/packages/50').then((response) => {
        console.log(response.data);
      });

      // create package
      /*axios.post('/api/packages', {
        width: 10,
        height: 20,
        length: 30,
        weight: 40,
      }).then((response) => {
        console.log(response.data);
      });*/

      // update package
      /*axios.put('/api/packages/50', {
        width: 10,
        height: 20,
        length: 30,
        weight: 40,
      }).then((response) => {
        console.log(response.data);
      });*/

      // delete package
      //axios.delete('/api/packages/1051');
    }
  }
</script>

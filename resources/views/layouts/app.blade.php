<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<div id="app">
  <v-app id="inspire">
    <v-card
      class="mx-auto overflow-hidden"
      height="100%"
      width="100%"
    >
      <v-app-bar
        color="#2E7D32"
        dark
      >
        <v-app-bar-nav-icon @click="drawer = true"></v-app-bar-nav-icon>

        <v-toolbar-title>時間割管理アプリ</v-toolbar-title>
      </v-app-bar>

      <v-navigation-drawer
        v-model="drawer"
        absolute
        temporary
      >
        <v-list
          nav
          dense
        >
          <v-list-item-group
            v-model="group"
            active-class="deep-purple--text text--accent-4"
          >
            <v-list-item>
              <v-list-item-icon>
                <v-icon>mdi-home</v-icon>
              </v-list-item-icon>
              <v-list-item-title>チャットルーム</v-list-item-title>
            </v-list-item>

          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
      <div class="m-5">
       @yield('content')
       </div>
    </v-card>

  </v-app>
</div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script>
new Vue({
  el: '#app',
  vuetify: new Vuetify(),
  delimiter:["${","}"],
  data: () => ({
  drawer: false,
    group: null,
    type: 'month',
    mode: 'stack',
    weekday: [0, 1, 2, 3, 4, 5, 6],
    value: '',
    events:[{
         name: "課題締切",
         start: '2021-06-04',
         color:"black",
         timed: false,
       }],
  }),
  methods:{
    showDay:function(e){
        location.href="/date/"+e.date
    }
  }

})
  </script>
</body>
</html>

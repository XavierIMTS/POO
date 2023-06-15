// OneThing.vue

<template>
  <div v-if="thing">
    <button @click="$router.go(-1)">Retour</button>
    
    <h1>{{ thing.title }}</h1>
    <img :src="thing.imageUrl" :alt="thing.title" />
    <p>{{ thing.description }}</p>
    <router-link :to="{ title: 'edit', params: { id: thing._id } }">Modifier </router-link>
    <router-link :to="{ name: 'delete', params: { id: thing._id } }">Supprimer</router-link>
    
    <button @click="deleteThing">Supprimer</button>
  </div>
</template>

<script>
import axios from 'axios';


export default {
  name: 'OneThing',
  props: ['id'],
  data() {
    return {
      thing: null,
    };
  },
  
  watch: {
    // Watch the `id` prop for changes
    id(newId) {
      // Fetch new data when the `id` prop changes
      this.fetchData(newId);
    },
  },
  mounted() {
    // Fetch data when the component is mounted
    this.fetchData(this.id);
  },
  methods: {
    deleteThing() {
      // Envoi d'une requête DELETE à l'API backend pour supprimer l'objet Thing spécifié
      axios
        .delete(`/api/stuff/${this.id}`)
        .then(() => {
          // Redirection de l'utilisateur vers la page d'accueil après la suppression
          this.$router.push({ name: 'AllProducts' });
        })
        .catch((error) => {
          console.error(error);
        });
    },
   fetchData(id) {
      // Récupération de l'objet Thing spécifié depuis l'API backend
      axios
        .get(`/api/stuff/${id}`)
        .then((response) => {
          this.thing = response.data;
        })
        .catch((error) => {
          console.error(error);
        });
    },
    
  },
};
</script>

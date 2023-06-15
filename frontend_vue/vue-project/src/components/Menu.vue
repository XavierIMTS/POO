<template>
    <div>
      <h1>Menu</h1>
      <ul>
        <li><a href="#">Accueil </a>
        <a href="#"> À propos </a>
        <a href="#" @click="showLogin = !showLogin">Se connecter</a></li>
        <router-link to="/all-products">View All Products</router-link>
    
      </ul>
      <!-- Utilisation du composant Login avec une directive v-if -->
      <user v-if="showLogin"></user>
     
    </div>
  </template>
  
  <script>
  import User from './User.vue'; // Import du composant Login

  export default {
    name: 'Menu',
    components: {
      User, // Enregistrement du composant Login

      
    },
    data() {
      return {
        showLogin: false // Propriété pour contrôler l'affichage du formulaire de connexion
      }
    }
  }
  </script>
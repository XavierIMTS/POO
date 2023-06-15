<template>
    <form @submit.prevent="submitForm">
      <input v-model="title" type="text" placeholder="Title" />
      <input v-model="description" type="text" placeholder="Description" />
      <input v-model="price" type="number" placeholder="Price" />
      <input @change="imageUrl" type="file"  />
      <button type="submit">Create</button>
    </form>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'CreateThing',
    data() {
      return {
        title: '',
        description: '',
        price: '',
        imageUrl: null,
      };
    },
    methods: {
      onFileChange(e) {
        this.imageUrl = e.target.files[0];
      },
      submitForm() {
        const formData = new FormData();
        formData.append('thing', JSON.stringify({
          title: this.title,
          description: this.description,
          price: this.price,
        }));
        formData.append('image', this.imageUrl);
  
        axios
          .post('/api/stuff', formData)
          .then(() => {
            // Handle successful creation
          })
          .catch((error) => {
            // Handle error
          });
      },
    },
  };
  </script>
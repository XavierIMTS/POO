<template>
    <form @submit.prevent="submitForm">
      <input v-model="title" type="text" placeholder="Title" />
      <input v-model="description" type="text" placeholder="Description" />
      <input v-model="price" type="number" placeholder="Price" />
      <input type="file" @change="onFileChange" />
      <button type="submit">Update</button>
    </form>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    name: 'UpdateThing',
    props: ['thingId'],
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
        if (this.imageUrl) {
          formData.append('image', this.imageUrl);
        }
  
        axios
          .put(`/api/stuff/${this.thingId}`, formData)
          .then(() => {
            // Handle successful update
          })
          .catch((error) => {
            // Handle error
          });
      },
    },
  };
  </script>
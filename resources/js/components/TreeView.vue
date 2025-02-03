<template>
    <ul>
      <li v-for="page in pages" :key="page.id">
        {{ page.title }}
        <TreeView v-if="page.children && page.children.length" :pages="page.children"/>
      </li>
    </ul>
  </template>
  
  <script>
  export default {
    name: 'TreeView',
    props: ['pages']
  }
  </script>
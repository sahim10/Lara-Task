import './bootstrap';
import { createApp } from 'vue';
import App from './App.vue';
import TreeView from './components/TreeView.vue';

const app = createApp({});
app.component('tree-view', TreeView);
app.mount('#app');
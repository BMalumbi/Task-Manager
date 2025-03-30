<template>
    <div class="task-list">
      <h2>Task List</h2>
      <ul>
        <!-- Boucle à travers les tâches et les afficher -->
        <li v-for="task in tasks" :key="task.id" class="task-item">
          <span :class="{ completed: task.completed }">{{ task.name }}</span>
          <button @click="toggleTaskCompletion(task)">Mark as {{ task.completed ? 'Incomplete' : 'Completed' }}</button>
          <button @click="deleteTask(task.id)">Delete</button>
        </li>
      </ul>
      <button @click="addNewTask">Add New Task</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tasks: [] // Liste des tâches
      };
    },
    methods: {
      // Ajoute une nouvelle tâche (cette méthode pourrait être liée à une API backend)
      addNewTask() {
        const newTask = {
          id: Date.now(), // Crée un ID unique pour la tâche
          name: 'New Task',
          completed: false
        };
        this.tasks.push(newTask);
      },
      // Permet de marquer une tâche comme terminée ou non
      toggleTaskCompletion(task) {
        task.completed = !task.completed;
      },
      // Supprime une tâche par son ID
      deleteTask(taskId) {
        this.tasks = this.tasks.filter(task => task.id !== taskId);
      }
    },
    mounted() {
      // Charge les tâches depuis une source de données (par exemple, une API)
      // Exemple de données statiques en attendant de récupérer les données du backend
      this.tasks = [
        { id: 1, name: 'Learn Vue.js', completed: false },
        { id: 2, name: 'Build Task Manager', completed: false },
        { id: 3, name: 'Test the app', completed: true }
      ];
    }
  };
  </script>
  
  <style scoped>
  .task-list {
    font-family: Arial, sans-serif;
    padding: 20px;
  }
  
  .task-list h2 {
    text-align: center;
  }
  
  .task-item {
    display: flex;
    justify-content: space-between;
    margin: 10px 0;
  }
  
  .task-item button {
    margin-left: 5px;
  }
  
  .completed {
    text-decoration: line-through;
    color: #888;
  }
  </style>
  
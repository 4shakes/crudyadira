<template>
  <div class="row justify-content-center">
    <nota-component @new="addNota"></nota-component>

    <div class="col-md-7">
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Asignatura</th>
              <th scope="col">Nota</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <lista-component
            v-for="(nota, index) in notas"
            :key="index"
            :nota="nota"
            @delete="deleteNota(index)"
            @update="updateNota(index, ...arguments)"
          ></lista-component>
        </table>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      notas: []
    };
  },
  mounted() {
    axios.get("notas").then(response => {
      this.notas = response.data;
      console.log(this.notas);
    });
  },
  methods: {
    addNota(nota) {
      this.notas.push(nota);
    },
    deleteNota(index) {
      console.log(index);
      this.notas.splice(index, 1);
    },
    updateNota(index) {
      this.notas[index] = this.nota;
    }
  }
};
</script>
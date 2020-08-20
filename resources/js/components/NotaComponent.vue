<template>
  <div class="col-md-3">
    <div class="card">
      <div class="card-header text-uppercase">Registro de Notas</div>

      <div class="card-body">
        <form @submit.prevent="newNota">
          <div class="form-group">
            <label for="nombre">Alumno</label>
            <input
              type="text"
              class="form-control"
              name="nombre"
              id="nombre"
              placeholder="Ingrese el nombre del alumno"
              v-model="nombre"
            />
          </div>
          <div class="form-group">
            <label for="asignatura">Asignatura</label>
            <input
              type="text"
              class="form-control"
              id="asignatura"
              name="asignatura"
              placeholder="Ingrese la asignatura"
              v-model="asignatura"
            />
          </div>
          <div class="form-group">
            <label for="nota">Nota</label>
            <input
              type="number"
              class="form-control"
              id="nota"
              name="nota"
              placeholder="Ingrese la nota"
              v-model="nota"
            />
          </div>

          <button type="submit" class="btn btn-info btn-block">Agregar</button>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      nombre: "",
      asignatura: "",
      nota: ""
    };
  },
  methods: {
    newNota() {
      const params = {
        nombre: this.nombre,
        asignatura: this.asignatura,
        nota: this.nota
      };
      /*     console.log(params); */
      this.nombre = "";
      this.asignatura = "";
      this.nota = "";

      axios.post("notas", params).then(response => {
        const nota = response.data;
        this.$emit("new", nota);
      });
    }
  }
};
</script>

<template>
  <tbody v-if="editMode">
    <tr>
      <th scope="row">{{nota.id}}</th>
      <td>{{nota.nombre}}</td>
      <td>{{nota.asignatura}}</td>
      <td>{{nota.nota}}</td>
      <td>
        <button class="btn btn-warning" @click="onClickEdit()">editar</button>
        <button type="button" class="btn btn-danger" @click="onClickDelete()">Eliminar</button>
      </td>
    </tr>
  </tbody>
  <tbody v-else>
    <tr>
      <th scope="row">{{nota.id}}</th>
      <td>
        <input v-model="nota.nombre" class="form-control form-control-sm" type="text" />
      </td>
      <td>
        <input v-model="nota.asignatura" class="form-control form-control-sm" type="text" />
      </td>
      <td>
        <input v-model="nota.nota" class="form-control form-control-sm" type="number" />
      </td>
      <td>
        <button class="btn btn-success" @click="onClickUpdate()">Actualizar</button>
        <button type="button" class="btn btn-danger" @click="onClickDelete()">Eliminar</button>
      </td>
    </tr>
  </tbody>
</template>

<script>
export default {
  props: ["nota"],
  data() {
    return {
      editMode: true
    };
  },
  methods: {
    onClickDelete() {
      axios.delete(`/notas/${this.nota.id}`).then(response => {
        this.$emit("delete");
      });
    },
    onClickEdit() {
      this.editMode = false;
    },
    onClickUpdate() {
      const params = {
        nombre: this.nota.nombre,
        asignatura: this.nota.asignatura,
        nota: this.nota.nota
      };

      axios.put(`/notas/${this.nota.id}`, params).then(response => {
        this.editMode = true;
        const nota = response.data;
        this.$emit("update", nota);
      });
    }
  }
};
</script>

<style>
</style>
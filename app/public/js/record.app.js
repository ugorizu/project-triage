var patientRecordApp = new Vue({
  el: '#patientRecordApp',
  data: {
    patients: [],
    //ADD CODE: list

  },
  methods: {
    fetchPatients() {
      fetch('dummy.php')
      .then(response => response.json())
      .then(json => { patientRecordApp.patients = json })
    }
  },

    //ADD CODE:A.Create "handleCreateRecord "(1)handle on create (2)this: patients.push ....
    //         B. this.patinets +plus list

  created() {
    this.fetchPatients();
  }
});

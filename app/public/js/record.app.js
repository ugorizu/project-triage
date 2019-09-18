var patientRecordApp = new Vue({
  el: '#patientRecordApp',
  data: {
    patients: [],
    //ADD CODE FROM "TOM's UPDATES"
  },
  methods: {
    fetchPatients() {
      fetch('dummy.php')
      .then(response => response.json())
      .then(json => { patientRecordApp.patients = json })
    }
  },
  created() {
    this.fetchPatients();
  }
});

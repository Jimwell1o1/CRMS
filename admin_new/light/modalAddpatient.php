<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Walk-in/Set Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../../includes/bookingDetails-admin.inc.php" method="post">
        <div>
          <label class="form-label">Patient Name:</label>
          <input name="name" type="text" class="form-control" placeholder="Enter Patient Name" required>
        </div>
        <div>
          <label class="form-label">Patient Email:</label>
          <input name="email" type="text" class="form-control" placeholder="Enter Patient email" required>
        </div>
        <div>
          <label class="form-label">Gender:</label>
          <select name="gender" class="form-select" required>
            <option disabled selected>Select Gender</option>
            <option value = "Male">Male</option>
            <option value = "Female">Female</option>
          </select>
        </div>
        <div class = "row"> 
        <div class = "col">
          <label class="form-label">Appointment Date:</label>
          <input id = "dateControl"  name="date" type="date" class="form-control" required>
        </div>
        <div class = "col">
          <label class="form-label">Time:</label>
          <select class="form-select" name="time" required>
            <option disabled selected>Select Time</option>
            <option value = "8:00 AM">8:00 AM</option>
            <option value = "9:00 AM">9:00 AM</option>
            <option value = "10:00 AM">10:00 AM</option>
            <option value = "1:00 PM">1:00 PM</option>
            <option value = "2:00 PM">2:00 PM</option>
            <option value = "3:00 PM">3:00 PM</option>
            <option value = "4:00 PM">4:00 PM</option>
            <option value = "5:00 PM">5:00 PM</option>
                        </select>
        </div>
      </div>
        <div>
          <label class="form-label">Dental Clinic:</label>
          <select name="branch" class="form-select" required>
            <option disabled selected>Select Branch</option>
            <option value="Malinao">Malinao</option>
            <option value="San Joaquin">San Joaquin</option>
            <option value="Pinagbuhatan">Pinagbuhatan</option>
          </select>
        </div>
        <div>
          <label class="form-label">Procedure/Dental Service</label>
          <select name="procedure" id="inputState" class="form-select" required>
            <option disabled selected>Select Procedure...</option>
            <option value="Oral Prophylaxis">Oral Prophylaxis</option>
            <option value="Tooth Restoration">Tooth Restoration</option>
            <option value="Tooth Extraction">Tooth Extraction</option>
            <option value="Fluoride Application">Fluoride Application</option>
            <option value="Prosthodontic Treatment">Prosthodontic Treatment</option>
            <option value="Orthodontic Treatment">Orthodontic Treatment</option>
            <option value="Periodontic Rehab">Periodontic Rehab</option>
          </select>
        </div>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button  type="submit" name="confirm-submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Walk-in/Set Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../includes/bookingDetails-admin.inc.php" method="post">
        <div>
          <label class="form-label"><b>Patient Name:</b></label>
          <input type="text" class="form-control" placeholder="Enter full name">
        </div>
        <div>
          <label class="form-label">Gender:</label>
          <select class="form-select">
            <option selected>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div>
          <label class="form-label">Appointment Date:</label>
          <input type="date" class="form-control" >
        </div>
        <div>
          <label class="form-label">Time:</label>
          <select class="form-select">
            <option selected>Select Time</option>
            <option>8:00 AM</option>
            <option>9:00 AM</option>
            <option>10:00 AM</option>
            <option>1:00 AM</option>
            <option>2:00 AM</option>
            <option>3:00 AM</option>
            <option>4:00 AM</option>
            <option>5:00 AM</option>
                        </select>
        </div>
        <div>
          <label class="form-label">Dental Clinic:</label>
          <select class="form-select">
            <option selected>Select Branch</option>
            <option>Malinao</option>
            <option>San Joaquin</option>
            <option>Pinagbutan</option>
          </select>
        </div>
        <div>
          <label class="form-label">Procedure/Dental Service</label>
          <select id="inputState" class="form-select">
            <option selected>Select Procedure...</option>
            <option value="">Oral Prophylaxis</option>
            <option value="">Tooth Restoration</option>
            <option value="">Tooth Extraction</option>
            <option value="">Fluoride Application</option>
            <option value="">Prosthodontic Treatment</option>
            <option value="">Orthodontic Treatment</option>
            <option value="">Periodontic Rehab</option>
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

<section>
<div class="main-form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header bg-success text-white text-center pt-3">
                        <h5>Loan Apply</h5>
                    </div>
                    <div class="card-body">
                        <form action="" class="contact-form">
                            @csrf
                            
                            <div class="form-section">
                                <label for="firstname">First Name:</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name" required>
                                <label for="firstname">last Name:</label>
                                <input type="text" name="firstname" class="form-control" placeholder="First Name">
                                
                            </div>
                            <div class="form-section">
                                <label for="firstname">Phone Number</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Phone Number">
                                <label for="firstname">E-mail</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Email ">
                            </div> 
                            <div class="form-section">
                                <label for="firstname">Temp Address</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Temp Address">
                                <label for="firstname">Permanent Address</label>
                                <input type="text" name="firstname" class="form-control" placeholder="Permanent Address">
                            </div>
                            <div class="form-navigation mt-4 d-flex justify-content-between">
                                <button type="button" class="previous btn btn-success ">Previous</button>
                                <button type="button" class=" next btn btn-success ">Next</button>
                                <button type="submit" class="btn btn-success ">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
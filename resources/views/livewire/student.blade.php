<div>
  
  @if ($check==true)
  <div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#exampleModal">Add Student</button>
  <!-- Modal -->
  <div  wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="submit">
            @csrf 
            <div class="form form-outline mt-3 mb-4">
              <input placeholder="Student Name" required type="text" wire:model="name" name="name" style="border-radius:100pt" class="form-control"/>
            </div>          
            <div class="form-outline mb-4 form">
              <input placeholder="Date of birth" class="form-control" name="dob" wire:model="dob" style="border-radius:100pt" type="date"/>
            </div>
            <div class="form-outline mb-4 form">
              <div class="d-flex">
                  <input type="text" name="class" placeholder="Class" required style="border-radius:100pt" wire:model="class" class="form-control mr-2"/>
              </div>
          </div>
            <div class="form-outline mb-4 form">
                {{-- pattern="03[0-4]{1}[0-9]{8}" --}}
              <input type="tel" placeholder="Contact Number" name="contact" wire:model="contact" style="border-radius:100pt" required class="form-control">
            </div>
            <div class="form-outline mb-4 form">
              <input type="email" placeholder="Email" name="email" style="border-radius:100pt" wire:model="email" class="form-control">
            </div>
            <div class="form-outline mb-4 form">
              <input type="text" placeholder="Address" name="address" style="border-radius:100pt" wire:model="address" required class="form-control">
            </div>
            <div class="form-outline mb-4 form">
              <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" value="female"  name="gender" wire:model="gender" id="femaleGender"/>
                <label class="form-check-label" for="femaleGender">Female</label>
              </div>

              <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" value="male" name="gender" wire:model="gender" id="maleGender"/>
                <label class="form-check-label" for="maleGender">Male</label>
              </div>

              <div class="form-check form-check-inline mb-0">
                <input class="form-check-input" type="radio" value="others" name="gender" wire:model="gender" id="otherGender"/>
                <label class="form-check-label" for="otherGender">Other</label>
              </div>
          </div>
            <div class="form-outline mb-2 form">
              <label for="">Status</label>
              <select name="status" wire:model="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="hide()" id="closemodal" style="width:50pt" class="btn btn-primary btn-sm">Add</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
            
      </form>
        </div>
      </div>
    </div>
  </div> 
</div>
  @else
  <button type="button" class="btn btn-primary m-2" data-toggle="modal" data-target="#exampleModal">Add Student</button>
  @endif

  <div>
  <!-- Modal -->
  <div  wire:ignore.self class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="updateModalLabel">Update Student</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form wire:submit.prevent="updateData({{$s_id}})">
            @csrf 
            <div class="form form-outline mt-3 mb-4">
              <input placeholder="Student Name" required type="text" wire:model="name" name="name" style="border-radius:100pt" class="form-control"/>
            </div>          
            <div class="form-outline mb-4 form">
              <input placeholder="Date of birth" class="form-control" name="dob" wire:model="dob" style="border-radius:100pt" type="date"/>
            </div>
            <div class="form-outline mb-4 form">
              <div class="d-flex">
                  <input type="text" name="class" placeholder="Class" required style="border-radius:100pt" wire:model="class" class="form-control mr-2"/>
              </div>
          </div>
            <div class="form-outline mb-4 form">
                {{-- pattern="03[0-4]{1}[0-9]{8}" --}}
              <input type="tel" placeholder="Contact Number" name="contact" wire:model="contact" style="border-radius:100pt" required class="form-control">
            </div>
            <div class="form-outline mb-4 form">
              <input type="email" placeholder="Email" name="email" style="border-radius:100pt" wire:model="email" class="form-control">
            </div>
            <div class="form-outline mb-4 form">
              <input type="text" placeholder="Address" name="address" style="border-radius:100pt" wire:model="address" required class="form-control">
            </div>
            <div class="form-outline mb-4 form">
              <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" value="female"  name="gender" wire:model="gender" id="femaleGender"/>
                <label class="form-check-label" for="femaleGender">Female</label>
              </div>

              <div class="form-check form-check-inline mb-0 me-4">
                <input class="form-check-input" type="radio" value="male" name="gender" wire:model="gender" id="maleGender"/>
                <label class="form-check-label" for="maleGender">Male</label>
              </div>

              <div class="form-check form-check-inline mb-0">
                <input class="form-check-input" type="radio" value="others" name="gender" wire:model="gender" id="otherGender"/>
                <label class="form-check-label" for="otherGender">Other</label>
              </div>
          </div>
            <div class="form-outline mb-2 form">
              <label for="">Status</label>
              <select name="status" wire:model="status">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
              </select>
            </div>
            <div class="modal-footer">
                <button type="submit" onclick="uhide()" id="closemodal" style="width:50pt" wire:click.prevent="updateData({{$s_id}})" class="btn btn-primary btn-sm">Update</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
            </div>
      </form>
        </div>
      </div>
    </div>
  </div> 
</div>
    <div class="container mt-2 mb-5 table-responsive">
      <div>
        <button wire:click="exportData">Export to Excel</button>
    </div>
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Class</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Email</th>
                    <th scope="col">Address</th>
                    <th scope="col">Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->dob}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->class}}</td>
                        <td>{{$item->contact}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->status}}</td>
                        <td class="text-center d-flex gap-2">
                            <a href="" class="btn btn-sm btn-primary" wire:click.prevent="edit({{$item['id']}})" data-toggle="modal" data-target="#updateModal">Edit</a>
                            <a class="btn btn-sm btn-danger" wire:click="delete({{$item['id']}})">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>  
</div>

<script>
  function hide()
  {
    var close = document.getElementById('#closemodal');
    // close.data-dismiss = true;
    // console.log('asdasdasd');
   
    // document.getElementById("exampleModal").close();

    var modal = document.getElementById('exampleModal');
    var modalBackdrop = document.querySelector('.modal-backdrop');

    modal.classList.remove('show');
    modal.setAttribute('aria-hidden', 'true');
    modal.style.display = 'none';

    if (modalBackdrop) {
      modalBackdrop.parentNode.removeChild(modalBackdrop);
    }
    document.body.classList.remove('modal-open');
  }
  function uhide()
  {
    var close = document.getElementById('#closemodal');
    // close.data-dismiss = true;
    // console.log('asdasdasd');
   
    // document.getElementById("exampleModal").close();

    var modal = document.getElementById('updateModal');
    var modalBackdrop = document.querySelector('.modal-backdrop');

    modal.classList.remove('show');
    modal.setAttribute('aria-hidden', 'true');
    modal.style.display = 'none';

    if (modalBackdrop) {
      modalBackdrop.parentNode.removeChild(modalBackdrop);
    }
    document.body.classList.remove('modal-open');
  }

//   $('#closemodal').click(function() {
//     $('#exampleModal').modal('hide');
// });
 
</script>
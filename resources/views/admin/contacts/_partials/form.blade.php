
@include('admin.includes.alert')
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="{{$contact->name ?? ''}}" >
  </div>
  <div class="form-group">
    <label for="name">Email</label>
    <input type="email" name="email" class="form-control" value="{{$contact->email ?? ''}}" >
  </div>

  <div class="form-group">
    <label for="contact">contact</label>
    <input type="text" name="contact" class="form-control" value="{{$contact->contact ?? ''}}" >
  </div>




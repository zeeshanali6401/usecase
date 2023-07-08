<div style="text-align: center">
    <h2>Category</h2>
    <h5>Slug is: {{$slug}}</h5>
    <form wire:submit.prevent="submit">
        <input type="text" name="name" wire:model="name" placeholder="Name"><br><br>
        <input type="submit" value="Submit">
    </form>
    <div class="container w-25 table-responsive">
        
        <table class="table  table-primary">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collection as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
</div>

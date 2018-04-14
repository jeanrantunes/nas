
<select name="hospital" id="hospital">
    @foreach ($hospitals as $d)
        <option data-id="{{$d->id}}">{{ $d->name }}</option>
    @endforeach
</select>
<select name="occupation" id="occupation">
    @foreach ($occupations as $d)
        <option data-id="{{$d->id}}">{{ $d->occupation }}</option>
    @endforeach
</select>
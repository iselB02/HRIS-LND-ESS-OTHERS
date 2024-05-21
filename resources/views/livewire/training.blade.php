<div>
    
    
    <div id="form_add">
        <span class="close" >&times;</span>
        <form wire:submit.prevent="submit">
            <div>
                <label for="title">Title</label>
                <input type="text" id="title" wire:model="title">
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label for="organization">Organization</label>
                <input type="text" id="organization" wire:model="organization">
                @error('organization') <span class="error">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label for="start_date">Start Date</label>
                <input type="date" id="start_date" wire:model="start_date">
                @error('start_date') <span class="error">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label for="end_date">End Date</label>
                <input type="date" id="end_date" wire:model="end_date">
                @error('end_date') <span class="error">{{ $message }}</span> @enderror
            </div>
    
            <div>
                <label for="location">Location</label>
                <input type="text" id="location" wire:model="location">
                @error('location') <span class="error">{{ $message }}</span> @enderror
            </div>
    
            <button id="submit_add" type="submit">Add Training</button>
        </form>
    </div>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Organization</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Location</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trainings as $training)
                <tr>
                    <td>{{ $training->title }}</td>
                    <td>{{ $training->organization }}</td>
                    <td>{{ $training->start_date }}</td>
                    <td>{{ $training->end_date }}</td>
                    <td>{{ $training->location }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@push('scripts')
    <script src="{{ asset('js/my_profile.js') }}" defer></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/myprofilepage.css') }}">
@endpush
<x-layout>
    <div class="note-container">
        <a href="#" class="new-note-btn">
            New Phony
        </a>
        <div class="notes">
            @foreach ($phonies as $phony)
                <div class="note">
                    <div class="note-body">
                        {{ $phony->phony }}
                    </div>
                    <div class="note-buttons">
                        <a href="#" class="note-edit-button">View</a>
                        <a href="#" class="note-edit-button">Edit</a>
                        <button class="note-delete-button">Delete</button>
                    </div>
                </div>
            @endforeach
        </div>

</x-layout>

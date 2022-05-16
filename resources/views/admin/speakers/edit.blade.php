<x-admin.app title="Speakers | Edit">
    <div class="mt-8 space-y-6">
        <h1 class="text-xl font-bold text-gray-900 uppercase">Edit Speaker</h1>

        <form method="POST" action="{{ route('admin.speakers.update',$speaker) }}">
            @csrf

            @method('PATCH')

            <div class="space-y-6">
                <div class="w-full p-4 bg-white rounded-lg">
                    <div class="p-4 space-y-6">
                        <x-form.group label="Name" for="name">
                            <x-form.input type="text" id="name" name="name" value="{{ old('name') ?? $speaker->name }}" />
                            <x-form.error name="name" />
                        </x-form.group>

                        <x-form.group label="Image" for="image">
                            <input type="file" id="image" name="image" class="@error('image') border-red-600 @enderror">
                            <x-form.error name="image" />
                        </x-form.group>

                        <x-form.group label="Description" for="description">
                            <x-form.ckeditor name="description">{{ old('description') ?? $speaker->description }}</x-form.ckeditor>
                            <x-form.error name="description" />
                        </x-form.group>

                        <x-form.group label="Facebook" for="facebook">
                            <x-form.input-link type="text" id="facebook" name="facebook" value="{{ old('facebook') ?? $speaker->facebook }}" placeholder="www.facebook.com/username" />
                            <x-form.error name="facebook" />
                        </x-form.group>

                        <x-form.group label="Twitter" for="twitter">
                            <x-form.input-link type="text" id="twitter" name="twitter" value="{{ old('twitter') ?? $speaker->twitter }}" placeholder="www.twitter.com/username" />
                            <x-form.error name="twitter" />
                        </x-form.group>

                        <x-form.group label="Linkedin" for="linkedin">
                            <x-form.input-link type="text" id="linkedin" name="linkedin" value="{{ old('linkedin') ?? $speaker->linkedin }}" placeholder="www.linkedin.com/in/username" />
                            <x-form.error name="linkedin" />
                        </x-form.group>

                    </div>
                </div>

                <div class="flex items-center justify-end space-x-3">

                    <x-button.secondary link="{{ route('admin.speakers.index') }}">Cancel</x-button.secondary>

                    <x-button.primary type="submit">Update</x-button.primary>
                </div>
            </div>
        </form>
    </div>

    <x-notification />

</x-admin.app>

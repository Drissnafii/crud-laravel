<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <form method="POST" action="/profile/store"  class="w3-container w3-center" style="margin-top: 50px;">

        {{-- manage validation view errors  --}}
        <x-error-list/>
        {{-- -------------- --}}

        @csrf
        <h2 class="w3-text-blue">Créer Un Profile</h2>

        <!-- Name Input -->
        <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
            <label for="name" class="w3-text">Nom complet</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w3-input w3-border w3-round" style="text-align: center;">

            @error('name')
            <span class="w3-text-red" style="font-size: 14px; font-weight: bold; display: block; margin-top: 5px;">
                {{ $message }}
            </span>
            @enderror
        </div>


        <!-- Email Input -->
        <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
            <label for="email" class="w3-text">Email</label>
            <input type="text" id="email" name="email" value="{{ old('email') }}" class="w3-input w3-border w3-round" style="text-align: center;">

            @error('email')
            <span class="w3-text-red" style="font-size: 14px; font-weight: bold; display: block; margin-top: 5px;">
                {{ $message }}
            </span>
            @enderror

        </div>

        <!-- Password Input -->
        <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
            <label for="password" class="w3-text">Password</label>
            <input type="password" id="password" name="pass" value="{{ old('pass') }}" class="w3-input w3-border w3-round" style="text-align: center;">
        </div>

                <!-- Password Input Comfirmation -->
                <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
                    <label for="password" class="w3-text">Confirm Password</label>
                    <input type="password" id="password" name="pass_confirmation" class="w3-input w3-border w3-round" style="text-align: center;">
                </div>

        <!-- Bio Input -->
        <div class="w3-card w3-padding w3-round w3-margin-top" style="max-width: 400px; margin: 0 auto;">
            <label for="bio" class="w3-text">Bio</label>
            <textarea id="bio" name="bio" class="w3-input w3-border w3-round" style="text-align: center;">
                {{ old('bio') }}
            </textarea>
        </div>

        <!-- Submit Button -->
        <button class="w3-button w3-blue w3-round w3-margin-top" style="max-width: 400px; width: 100%; margin: 20px auto;" type="submit">Ajouter</button>
    </form>

</div>

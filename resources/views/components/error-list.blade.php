<div>
    <!-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi -->
    @if ($errors->any())
    <div class="w3-panel w3-border w3-round-large w3-padding" style="width: 50%; margin: 0 auto; background-color: #8B0000; color: white;">
        <h4 class="w3-text-white">Please review the following errors:</h4>

        <ul class="w3-ul">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

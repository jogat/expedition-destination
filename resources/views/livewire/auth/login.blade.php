<div style="display:flex; justify-content:center; align-items:center; height:100vh;">
    <form wire:submit="login" style="display:flex; flex-direction:column; gap:12px; width:300px;">
        <h2 style="margin:0;">Login</h2>

        <div style="display:flex; flex-direction:column;">
            <input type="email" wire:model="email" placeholder="Email" style="padding:8px; border:1px solid #cecece;">
            @error('email') <span style="color:red; font-size:13px;">{{ $message }}</span> @enderror
        </div>

        <div style="display:flex; flex-direction:column;">
            <input type="password" wire:model="password" placeholder="Password" style="padding:8px; border:1px solid #cecece;">
            @error('password') <span style="color:red; font-size:13px;">{{ $message }}</span> @enderror
        </div>

        <button type="submit" style="padding:8px; background:#cecece; cursor:pointer;">Login</button>
    </form>
</div>

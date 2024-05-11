
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="align-items-center d-flex m-0 navbar-brand text-wrap" href="{{ route('dashboard') }}">
        <span class="ms-3 font-weight-regular">jlycc</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0">
  <div class="collapse navbar-collapse h-100 w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('dashboard') ? 'active' : '') }}" href="{{ url('dashboard') }}">
          <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="16" height="16" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m11.6 11c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v9c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-2.092 0-6.908 0-9zm9.4 6c0-.552-.448-1-1-1h-6c-.538 0-1 .477-1 1v3c0 .552.448 1 1 1h6c.552 0 1-.448 1-1zm0-13c0-.552-.448-1-1-1-1.537 0-4.463 0-6 0-.552 0-1 .448-1 1v9.6c0 .552.448 1 1 1h6c.552 0 1-.448 1-1 0-2.194 0-7.406 0-9.6zm-9.4 0c0-.552-.448-1-1-1-1.655 0-4.945 0-6.6 0-.552 0-1 .448-1 1v3.6c0 .552.448 1 1 1h6.6c.552 0 1-.448 1-1 0-1.017 0-2.583 0-3.6z" fill-rule="nonzero"/></svg>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Finance</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('giver') ? 'active' : '') }}" href="{{ url('giver') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M11 24h-9v-12h9v12zm0-18h-11v4h11v-4zm2 18h9v-12h-9v12zm0-18v4h11v-4h-11zm4.369-6c-2.947 0-4.671 3.477-5.369 5h5.345c3.493 0 3.53-5 .024-5zm-.796 3.621h-2.043c.739-1.121 1.439-1.966 2.342-1.966 1.172 0 1.228 1.966-.299 1.966zm-9.918 1.379h5.345c-.698-1.523-2.422-5-5.369-5-3.506 0-3.469 5 .024 5zm.473-3.345c.903 0 1.603.845 2.342 1.966h-2.043c-1.527 0-1.471-1.966-.299-1.966z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Giver</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('accounting') ? 'active' : '') }}" href="{{ url('accounting') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm.25 7.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.271.574-.131.692-.722.057-1.006-.465-.217-1.889-.402-1.889-1.621 0-.682.52-1.292 1.492-1.426v-.534h.5v.509c.361.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.258-1.222-.232-.744.043-.81.688-.29.958.855.402 1.972.7 1.972 1.772.002.859-.672 1.316-1.5 1.433zm-.25 6.526c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm0 9c-2.205 0-4-1.795-4-4s1.795-4 4-4c2.206 0 4 1.795 4 4s-1.794 4-4 4zm9.577-13.613c1.233 2.352 1.548 6.801-2.585 9.756.019-.882-.113-1.706-.436-2.572 2.113-1.744 2.051-4.264 1.193-6.234l-2.377 1.236 1.596-5.182 5.032 1.737-2.423 1.259zm-19.154 5.611c-1.233-2.352-1.46-7.146 2.672-10.101-.019.882.114 1.707.436 2.572-2.114 1.745-2.139 4.609-1.281 6.58l2.377-1.236-1.596 5.182-5.031-1.738 2.423-1.259zm9.576 7.002v-.756h-.248v.756h-.502v-.756h-1.242l.127-.744h.27c.219 0 .347-.213.347-.427v-2.222c0-.208-.122-.351-.341-.351h-.41v-.75h1.249v-.75h.502v.75h.248v-.75h.502v.763c1.078.037 1.506.445 1.629.907.143.545-.216 1.002-.525 1.114.375.096.896.373.896 1.013 0 .871-.673 1.454-1.999 1.454v.749h-.503zm-.248-2.751v1.251c.991 0 1.671-.094 1.671-.629 0-.575-.734-.622-1.671-.622zm0-.499c.552 0 1.395-.04 1.395-.626 0-.499-.521-.625-1.395-.625v1.251z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Accounting</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ (Request::is('disbursement') ? 'active' : '') }}" href="{{ url('disbursement') }}">
            <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path d="M12 0c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm.25 7.474v.526h-.5v-.499c-.518-.009-1.053-.132-1.5-.363l.228-.822c.478.186 1.114.383 1.612.271.574-.131.692-.722.057-1.006-.465-.217-1.889-.402-1.889-1.621 0-.682.52-1.292 1.492-1.426v-.534h.5v.509c.361.01.768.073 1.221.21l-.181.824c-.384-.135-.808-.258-1.222-.232-.744.043-.81.688-.29.958.855.402 1.972.7 1.972 1.772.002.859-.672 1.316-1.5 1.433zm-.25 6.526c-2.762 0-5 2.238-5 5s2.238 5 5 5 5-2.238 5-5-2.238-5-5-5zm0 9c-2.205 0-4-1.795-4-4s1.795-4 4-4c2.206 0 4 1.795 4 4s-1.794 4-4 4zm9.577-13.613c1.233 2.352 1.548 6.801-2.585 9.756.019-.882-.113-1.706-.436-2.572 2.113-1.744 2.051-4.264 1.193-6.234l-2.377 1.236 1.596-5.182 5.032 1.737-2.423 1.259zm-19.154 5.611c-1.233-2.352-1.46-7.146 2.672-10.101-.019.882.114 1.707.436 2.572-2.114 1.745-2.139 4.609-1.281 6.58l2.377-1.236-1.596 5.182-5.031-1.738 2.423-1.259zm9.576 7.002v-.756h-.248v.756h-.502v-.756h-1.242l.127-.744h.27c.219 0 .347-.213.347-.427v-2.222c0-.208-.122-.351-.341-.351h-.41v-.75h1.249v-.75h.502v.75h.248v-.75h.502v.763c1.078.037 1.506.445 1.629.907.143.545-.216 1.002-.525 1.114.375.096.896.373.896 1.013 0 .871-.673 1.454-1.999 1.454v.749h-.503zm-.248-2.751v1.251c.991 0 1.671-.094 1.671-.629 0-.575-.734-.622-1.671-.622zm0-.499c.552 0 1.395-.04 1.395-.626 0-.499-.521-.625-1.395-.625v1.251z"/></svg>
            </div>
            <span class="nav-link-text ms-1">Disbursement</span>
        </a>
      </li> 
    </ul>
  </div>
</aside>

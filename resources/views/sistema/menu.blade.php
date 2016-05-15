<li class="{{ Request::is('sistema/*')? 'opened active expanded has-sub': '' }}">
    <a href="dashboard-1.html">
        <i class="fa-gear"></i>
        <span class="title">Sistema</span>
    </a>
    <ul>
        <li class="{{ Request::is('sistema/bairro')? 'active': '' }}">
            <a href="/sistema/bairro">
                <span class="title">Bairro</span>
            </a>
        </li>
        <li class="{{ Request::is('sistema/usuario')? 'active': '' }}">
            <a href="/sistema/usuario">
                <span class="title">Usuários</span>
            </a>
        </li>
        <li class="{{ Request::is('sistema/perfil')? 'active': '' }}">
            <a href="/sistema/perfil">
                <span class="title">Perfil</span>
            </a>
        </li>
        <li class="{{ Request::is('sistema/permissao')? 'active': '' }}">
            <a href="/sistema/permissao">
                <span class="title">Permissão</span>
            </a>
        </li>
    </ul>
</li>
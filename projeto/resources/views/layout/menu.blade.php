
<div class="barra">

    <nav>
        @if (Auth::guest())
            
        @else
        <a href="{{'/painel'}}"><div class="link">Painel</div></a>
        <a href="{{'/fornecedores'}}"><div class="link">Fornecedores</div></a>
        <a href="{{'/estoque'}}"><div class="link">Controle Estoque</div></a>
        <a href="{{'/funcionario'}}"><div class="link">Funcionario</div></a>
        <a href=""><div class="link">Sobre</div></a>
            
        @endif
        
    </nav>

</div>
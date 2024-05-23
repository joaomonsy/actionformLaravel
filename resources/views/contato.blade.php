<form action="{{ route('enviar_contato') }}" method="POST">
    @csrf
    <input type="text" name="nome" placeholder="Nome">
    <input type="text" name="telefone" placeholder="Telefone">
    <input type="text" name="endereco" placeholder="Endereço">
    <select name="sexo">
        <option value="masculino">Masculino</option>
        <option value="feminino">Feminino</option>
    </select>
    <button type="submit">Enviar</button>
</form>
<div class="p-2 bg-title text-light text-uppercase h5 mb-0 text-branco d-flex justify-content-space-between">
    <span><i class="fas fa-plus-circle" aria-hidden="true"></i> Cadastrar contato</span>
    <a href="<?php echo URL_BASE . "contato" ?>" class="btn btn-verde btn-pequeno"><i class="fas fa-arrow-left" aria-hidden="true"></i> Voltar</a>
</div>
<div class="p-1">
    <?php
    $this->verMsg();
    $this->verErro();
    ?>
</div>
<form action="<?php echo URL_BASE . "contato/salvar" ?>" method="POST">
    <div id="tab">
        <ul>
            <li><a href="#tab-1">Dados gerais</a></li>
            <li><a href="#tab-2">Endereço</a></li>
            <li><a href="#tab-3">Informações adicionais</a></li>
        </ul>
        <div id="tab-1">
            <div class="p-2">
                <span class="d-block mt-4 mb-4 h4 border-bottom text-uppercase">Informações básicas</span>
                <div class="rows">
                    <div class="col-12 mb-4">
                        <span class="h5 d-block text-upp">Marque os tipos desejados:</span>
                        <div class="rows itens-check px-3">
                            <div><input type="checkbox" name="eh_cliente" class="form-control tipo" id="contato" value="S" <?php echo ($contato->eh_cliente == "S") ? "checked" : "" ?>> <label class="p-2 mr-1" for="contato"><i class="fas fa-user"></i> Contato</label>
                            </div>
                            <div><input type="checkbox" name="eh_fornecedor" class="form-control tipo" id="fornecedor" value="S" <?php echo ($contato->eh_fornecedor == "S") ? "checked" : "" ?>> <label class="p-2 mr-1" for="fornecedor"><i class="fas fa-cart-arrow-down"></i> Fornecedor</label>
                            </div>

                            <div><input type="checkbox" name="eh_transportador" class="form-control tipo" id="transportador" value="S" <?php echo ($contato->eh_transportador == "S") ? "checked" : "" ?>> <label class="p-2" for="transportador"><i class="fas fa-truck"></i> Transportador</label>
                            </div>
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-2 mb-3">
                            <label class="text-label">Nome</label>
                            <input type="text" name="nome" value="<?php echo ($contato->nome) ? $contato->nome : NULL; ?>" placeholder="Digite aqui..." class="form-campo">
                        </div>
                        <div class="col-2 mb-3">
                            <label class="text-label">Nome Fantasia</label>
                            <input type="text" name="nome_fantasia" value="<?php echo ($contato->nome_fantasia) ? $contato->nome_fantasia : NULL; ?>" class="form-campo">
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-2 mb-3">
                            <label class="text-label">CPF</label>
                            <input type="text" name="cpf" value="<?php echo ($contato->cpf) ? $contato->cpf : NULL; ?>" placeholder="Digite aqui..." class="form-campo mascara-cpf">
                        </div>
                        <div class="col-2 mb-3">
                            <label class="text-label">CNPJ</label>
                            <input type="text" name="cnpj" value="<?php echo ($contato->cnpj) ? $contato->cnpj : NULL; ?>" placeholder="Digite aqui..." class="form-campo mascara-cnpj">
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-4 mb-3">
                            <label class="text-label">E-mail</label>
                            <input type="text" name="email" value="<?php echo ($contato->email) ? $contato->email : NULL; ?>" placeholder="Digite aqui..." class="form-campo">
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-1 mb-3">
                            <label class="text-label">DDD:</label>
                            <input type="text" name="ddd" value="<?php echo ($contato->ddd) ? $contato->ddd : NULL; ?>" placeholder="Digite aqui..." class="form-campo">
                        </div>
                        <div class="col-2 mb-3">
                            <label class="text-label">Fone:</label>
                            <input type="text" name="fone" value="<?php echo ($contato->fone) ? $contato->fone : NULL; ?>" placeholder="Digite aqui..." class="form-campo mascara-fone">
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-2 mb-3">
                            <label class="text-label">Celular:</label>
                            <input type="text" name="celular" value="<?php echo ($contato->celular) ? $contato->celular : NULL; ?>" placeholder="Digite aqui..." class="form-campo mascara-celular">
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-2">
                            <label class="text-label">Ativo</label>
                            <select class="form-campo" name="ativo">
                                <option value="">Selecione</option>
                                <option value="S" <?php echo ($produto->eh_produto == "S") ? "selected" : "" ?>>Sim</option>
                                <option value="N" <?php echo ($produto->eh_produto == "N") ? "selected" : "" ?>>Não</option>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div id="tab-2">
            <div class="p-2">
                <span class="d-block mt-4 h4 border-bottom text-uppercase">Endereço</span>
                <div class="rows">

                    <div class="rows col-12">
                        <div class="col-2 mb-3">
                            <label class="text-label">CEP</label>
                            <div class="input-grupo">
                                <input type="text" value="<?php echo ($contato->cep) ? $contato->cep : NULL; ?>" name="cep" id="cep" placeholder="Digite aqui..." class="form-campo mascara-cep busca_cep">

                            </div>
                        </div>
                        <div class="col-2 mb-3">
                            <label class="text-label">Logradouro</label>
                            <input type="text" name="logradouro" id="logradouro" value="<?php echo ($contato->logradouro) ? $contato->logradouro : NULL; ?>" placeholder="Digite aqui..." class="form-campo rua">
                        </div>
                        <div class="col-2 mb-4">
                            <label class="text-label">Numero</label>
                            <input type="text" name="numero" id="numero" value="<?php echo ($contato->numero) ? $contato->numero : NULL; ?>" placeholder="Digite aqui..." class="form-campo">
                        </div>
                        <div class="col-2 mb-3">
                            <label class="text-label">Complemento</label>
                            <input type="text" name="complemento" id="complemento" value="<?php echo ($contato->complemento) ? $contato->complemento : NULL; ?>" placeholder="Digite aqui..." class="form-campo">
                        </div>
                    </div>
                    <div class="rows col-12">
                        <div class="col-2 mb-3">
                            <label class="text-label">Bairro</label>
                            <input type="text" name="bairro" id="bairro" value="<?php echo ($contato->bairro) ? $contato->bairro : NULL; ?>" placeholder="Digite aqui..." class="form-campo bairro">
                        </div>

                        <div class="col-2 mb-2">
                            <label class="text-label">UF</label>
                            <div class="input-grupo">
                                <input type="text" value="<?php echo ($contato->uf) ? $contato->uf : NULL; ?>" name="uf" id="uf" placeholder="Digite aqui..." class="form-campo estado">
                            </div>
                        </div>
                        <div class="col-2 mb-2">
                            <label class="text-label">Cidade</label>
                            <div class="input-grupo">
                                <input type="text" value="<?php echo ($contato->cidade) ? $contato->cidade : NULL; ?>" name="cidade" id="cidade" placeholder="Digite aqui..." class="form-campo cidade">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-12 text-center pb-4">
        <input type="hidden" name="id_contato" value="<?php echo ($contato->id_contato) ? $contato->id_contato : NULL; ?>" placeholder="Digite aqui..." class="form-campo">
        <input type="submit" value="Salvar" class="btn btn-laranja m-auto">
    </div>
</form>
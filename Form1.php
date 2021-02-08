    <!DOCTYPE html>

    <html>
        <head>
            <meta charset="UTF-8">
            <title>aula form</title>
            <link rel="shortcut icon" href="img/camera.ico"/>
        </head>
        <body>
            <h1>Formulario cadastro</h1>
            <form>

                <br><label> Nome:</label>
                <input type="text" name="nome" id="nome" placeholder="Digite o seu primeiro nome">
                 <br><label> sobrenome:</label>
                 <input type="text" name="sobrenome" id="sbrenome" placeholder="Digite o seu primeiro sobrenome">
                  <br><label> E-mail:</label>
                  <input type="email" name="email" id="email" placeholder="Digite o seu primeiro email">
                   <br> <label> Telefone:</label>
                    <input type="text" name="tel" id="tel" placeholder="Digite o seu primeiro telefone">
                    <br><label> Data de Nasimento:</label>
                    <input type="date" name="datanas" id="datanas" placeholder="Digite o seu primeiro Data de nasimento">
                   <br> <select>
                    <option value="">Seu Sexo:</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Não Sei">Não Sei</option>
                    </select>
                   
                   <br><br><label>Quantos filhos você tem</label><br><br>
                    1<input type="radio" id="um" name="filho" value="um">
                    2<input type="radio" id="dois" name="filho" value="dois">
                    3<input type="radio" id="tres" name="filho" value="tres">
                    
                    <br><label>Escreva sua mensagem</label><br><br>
                    <textarea cols="50" rows="10"></textarea>
                     <br><input type="submit" value="Submit">

            </form>

        </body>
    </html>


package projetopiloto;



import javax.swing.JOptionPane;
import java.sql.*; 

public class conexao {

    final private String driver = "com.mysql.jdbc.Driver"; // definição do driver MySQL para acesso aos dados
    final private String url = "jdbc:mysql://127.0.0.1/clientes"; // acesso ao bd clientes no servidor - easyphp
    final private String usuario = "root"; // usuário do MySQL - easyphp
    final private String senha = ""; // senha do MySQL - easyphp
    private Connection conexao; // variável que armazenará a conexão aberta
    public Statement statement; // variável para execução dos comandos SQL dentro do ambiente Java
    public ResultSet resultset; // variável que armazenará o resultado da execução de um comando SQL

    
        public boolean conecta() {
        boolean result = true;
        try {
            // Carrega o driver JDBC especificado na variável 'driver'
            Class.forName(driver);
            // Tenta estabelecer a conexão com o banco de dados usando a url, usuário e senha
            conexao = DriverManager.getConnection(url, usuario, senha);
            // Exibe uma mensagem de sucesso
            JOptionPane.showMessageDialog(null, "Conexão estabelecida", "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        } catch (ClassNotFoundException Driver) {
            // Captura o erro se o driver não for encontrado
            JOptionPane.showMessageDialog(null, "Driver não localizado: " + Driver, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
            result = false;
        } catch (SQLException Fonte) {
            // Captura o erro se a fonte de dados (banco) não for localizada
            JOptionPane.showMessageDialog(null, "Fonte de dados não localizada: " + Fonte, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
            result = false;
        }
        return result;
    }

    public void desconecta() {
        try {
            // Fecha a conexão com o banco de dados
            conexao.close();
            // Exibe uma mensagem informando que a conexão foi fechada
            JOptionPane.showMessageDialog(null, "Conexão com o banco fechada", "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        } catch (SQLException fecha) {
            // Trata exceções que possam ocorrer ao fechar a conexão
            // (O bloco catch está vazio na imagem, mas poderia ter um log de erro)
        }
    }

    public void executaSQL(String sql) {
        try {
            // O ResultSet será rolável e somente leitura.
            statement = conexao.createStatement(ResultSet.TYPE_SCROLL_SENSITIVE, ResultSet.CONCUR_READ_ONLY);
            // Executa a consulta SQL e armazena o resultado em 'resultset'
            resultset = statement.executeQuery(sql);
        } catch (SQLException excecao) {
            // Captura e exibe qualquer erro que ocorra durante a execução do comando SQL
            JOptionPane.showMessageDialog(null, "Erro no comando SQL! \n Erro: " + excecao, "Mensagem do Programa", JOptionPane.INFORMATION_MESSAGE);
        }
    }
}
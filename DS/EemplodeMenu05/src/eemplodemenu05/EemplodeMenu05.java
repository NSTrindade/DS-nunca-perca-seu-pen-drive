/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Main.java to edit this template
 */
package eemplodemenu05;

import javax.swing.*;
import java.awt.*;
import java.awt.event.*;

public class EemplodeMenu05 extends JFrame {
    JMenuBar barra;
    JMenu opcoes, fonte, cor, estilo, tamanho;
    JMenuItem limpar,sair,azul,verde,vermelho,amarelo,preto;
    JCheckBoxMenuItem nomeE[];
    JRadioButtonMenuItem tamanhoF[];
    String tam[] = {"12","14","16","18"};
    String est[] = {"Normal", "Negrito", "Itálico", "Negrito e Itálico"};
    JTextArea texto;
    JPanel painel;
    JScrollPane rolagem;
    int estilofonte, tamfonte;
    
    public EemploDeMenu05(){
        super("Exemplo de Menus executando ações");
        Container tela = getContentPane();
        tela.setLayout(null);
        estilofonte=Font.PLAIN;
        tamfonte=12;
        barra = new JMenuBar();
        setJMenuBar(barra);
        opcoes = new Jmenu("Opções");
        barra.add(opcoes);
        
        limpar = new JMenuItem("Limpar");
        fonte = new JMenu("Fonte");
        cor = new JMenu("Cor");
        azul = new JMenuItem("Azul");
        verde = new JMenuItem("Verde");
        vermelho = new JMenuItem("Vermelho");
        amarelo = new JMenuItem("Amarelo");
        preto = new JMenuItem("Preto");
        TratadorE tratestilo = new TratadorE();
        estilo = new JMenu("Estilo");
        grupoE = new ButtonGroup();
        nomeE = new JCheckBoxMenuItem[4];
        
        for (int i = 0; i < 4 ; i++) {
            nomeE[i] = new JCheckBoxMenuItem(est[i]);
            estilo.add(nomeE[i]);
            grupoE.add(nomeE[i]);
            nomeE[i].addItemListener(tratestilo);
        }

        TratadorT trattamanho = new TratadorT();
        tamanho = new JMenu("Tamanho");
        grupoT = new ButtonGroup();
        tamanhoF = new JRadioButtonMenuItem[4];
        
        for(int i = 0; i < 4 ; i++) {
           tamanhoF[i] = new JRadioButtonMenuItem(tam[i]);
           tamanho.add(TamanhoF[i]);
           grupoT.add(TamanhoF[i]);
           tamanhoF[i].addItemListener(trattamanho);
        }
        
        sair = new JMenuItem("Sair");
        
        opcoes.setMnemonic(KeyEvent.VK_O);
        limpar.setMnemonic(KeyEvent.VK_L);
        fonte.setMnemonic(KeyEvent.VK_F);
        sair.setMnemonic(KeyEvent.VK_S);
        cor.setMnemonic(KeyEvent.VK_C);
        estilo.setMnemonic(KeyEvent.VK_E);
        tamanho.setMnemonic(KeyEvent.VK_T);
        
        opcoes.add(limpar);
        opcoes.add(fonte);
        opcoes.addSeparator();
        opcoes.add(sair);
        cor.add(azul);
        cor.add(verde);
        cor.add(vermelho);
        cor.add(amarelo);
        cor.add(preto);
        fonte.add("cor");
        fonte.add("tamanho");
        fonte.add("estilo");
        
        texto = new JTextArea(10,20);
        rolagem = new JScrollPane(texto);
        
        
        
    }
}

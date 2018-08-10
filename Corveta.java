/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package batalhanaval;

/**
 *
 * @author Mchel
 */
public class Corveta extends Navio{

    public Corveta() {
        this.setPapel("Defesa e Inteligência");
        this.setEnergia(1000);
        this.setNome("Corveta");
        this.setLinha(1);
        this.setColuna(2);
        
    }
    
    @Override
    public void adcionarHabilidade(){
        this.habilidade[0].setNome("Escudo");
        this.habilidade[0].setDescrição("Cria um escudo 3x3 sobre o seu próprio campo, capaz de absorver até 5 tiros antes de ser destruído. Não pode ser lançado sobre a própria corveta.");
        this.habilidade[0].setTipoDestruição("Defensivo");
    }
    
    @Override
    public int getLinha() {
        return linha;
    }

    @Override
    public void setLinha(int linha) {
        this.linha = linha;
    }

    @Override
    public int getColuna() {
        return coluna;
    }

    @Override
    public void setColuna(int coluna) {
        this.coluna = coluna;
    }
    @Override
    public String getNome() {
        return nome;
    }

    @Override
    public void setNome(String nome) {
        this.nome = nome;
    }

    @Override
    public int getEnergia() {
        return energia;
    }

    @Override
    public void setEnergia(int energia) {
        this.energia = energia;
    }
    @Override
    public String getPapel() {
        return papel;
    }
    @Override
    public void setPapel(String papel) {
        this.papel = papel;
    }

    @Override
    public Habilidade[] getHabilidade() {
        return habilidade;
    }

    @Override
    public void setHabilidade(Habilidade[] habilidade) {
        this.habilidade = habilidade;
    }
    
}

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package org.mypackage.hello;

/**
 *
 * @author raed
 */
public class NameHandler {
    private String name;

    /** Creates a new instance of NameHandler */
    public NameHandler() {
       name = null;
    }

    /**
     * @return the name
     */
    public String getName() {
        return name+"Hello there";
    }

    /**
     * @param name the name to set
     */
    public void setName(String name) {
        this.name = name;
    }

    
}

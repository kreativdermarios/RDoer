class CreateClientes < ActiveRecord::Migration
  def change
    create_table :clientes do |t|
      t.string :nome
      t.string :categoria

      t.timestamps null: false
    end
  end
end

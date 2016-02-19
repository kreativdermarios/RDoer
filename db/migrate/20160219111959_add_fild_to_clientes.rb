class AddFildToClientes < ActiveRecord::Migration
  def change
    add_column :clientes, :site, :string
  end
end
